using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Westerdals.Pages;
using Xamarin.Forms;

namespace Westerdals
{
	public class App : Application
	{
		public App()
		{
			// The root page of your application
			MainPage = new MainPage();
			//
			//
			//
		}

		protected override void OnStart()
		{
			// Handle when your app starts
		}

		protected override void OnSleep()
		{
			// Handle when your app sleeps
		}

		protected override void OnResume()
		{
			// Handle when your app resumes
		}
	}
}
