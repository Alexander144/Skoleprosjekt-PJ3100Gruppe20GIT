using Android.Widget;
using System;
using System.Collections.Generic;
using System.Collections.Specialized;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;

namespace SharedProject1
{
    public class ConnectDatabase
    {
		
		WebClient client = new WebClient();
		private Button button;
	    public string GetHash { get; set; }

		public ConnectDatabase(string Email, string Password)
		{

            WebClient client = new WebClient();
            Uri uri = new Uri("http://192.168.221.1/php/includes/process_login_android.php");
            Uri localUri = new Uri("http://localhost/php/android_api.php");
            NameValueCollection parameters = new NameValueCollection();

            parameters.Add("Email", Email);
            parameters.Add("Password", Password);

            client.UploadValuesCompleted += client_UploadValuesCompleted;
            client.UploadValuesAsync(uri, parameters);
        }

        void client_UploadValuesCompleted(object sender, UploadValuesCompletedEventArgs e)
        {
            string id = Encoding.UTF8.GetString(e.Result);
            int newID;
            int.TryParse(id, out newID);
            Console.WriteLine(newID);
            Console.ReadLine();
        }

    }
}
