using System;
using Android.App;
using Android.Content;
using Android.Runtime;
using Android.Views;
using Android.Widget;
using Android.OS;
using SharedProject1;

namespace WesterdalsApp
{
	[Activity(Label = "WesterdalsApp", MainLauncher = true, Icon = "@drawable/icon")]
	public class MainActivity : Activity
	{
		private string EmailSend;
		private string PasswordSend;

		protected override void OnCreate(Bundle bundle)
		{
			base.OnCreate(bundle);

			// Set our view from the "main" layout resource
			SetContentView(Resource.Layout.Main);
		
			// Get our button from the layout resource,
			// and attach an event to it
			//Button button = FindViewById<Button>(Resource.Id.MyButton);


			EditText Email = FindViewById<EditText>(Resource.Id.Email);
			EditText Password = FindViewById<EditText>(Resource.Id.Password);
			TextView tex1 = FindViewById<TextView>(Resource.Id.text1);
			TextView tex2 = FindViewById<TextView>(Resource.Id.text2);
			Button login = FindViewById<Button>(Resource.Id.Login);
			login.Click += (object sender, EventArgs e) => {
				Login(sender, e);
			};
		}

		public void Login(object sender, EventArgs e)
		{
			EditText Email = FindViewById<EditText>(Resource.Id.Email);
			EditText Password = FindViewById<EditText>(Resource.Id.Password);
			TextView tex1 = FindViewById<TextView>(Resource.Id.text1);
			TextView tex2 = FindViewById<TextView>(Resource.Id.text2);

			EmailSend = Email.Text;
			PasswordSend = Password.Text;
			ConnectDatabase data;

			string HashText = null;

            if (EmailSend == "" || PasswordSend == "" || EmailSend.Length<5 || PasswordSend.Length<5)
			{
				AlertDialog.Builder alert = new AlertDialog.Builder(this);
				alert.SetMessage("Invalid Username or Password");
				alert.SetTitle("Error");
				alert.SetCancelable(true);
				alert.SetPositiveButton("OK", (EventHandler<DialogClickEventArgs>)null);
				alert.Show();
			}
			else
			{
				data = new ConnectDatabase(EmailSend, PasswordSend);
				HashText = data.GetHash;
				tex1.Text = EmailSend;
				tex2.Text = HashText;
			}
		}
	}
}

