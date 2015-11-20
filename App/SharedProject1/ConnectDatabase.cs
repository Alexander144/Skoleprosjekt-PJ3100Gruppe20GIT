using Android.Widget;
using System;
using System.Collections.Generic;
using System.Text;

namespace SharedProject1
{
    public class ConnectDatabase
    {
		private Button button;


		public ConnectDatabase(Button button)
		{
			int count = 0;
			button.Click += delegate { button.Text = string.Format("{0} clicks!", count++); };
		}
    }
}
