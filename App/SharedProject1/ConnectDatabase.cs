﻿using Android.Widget;
using System;
using System.Collections.Generic;
using System.Collections.Specialized;
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
			var hashPassword = new sha512(Password);
			GetHash = hashPassword.hashData;
		}
    }
}
