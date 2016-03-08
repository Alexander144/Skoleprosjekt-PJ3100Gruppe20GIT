using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;

namespace WesterdalsApp
{
    [Activity(Label = "StartPage")]
    public class StartPageActivity : Activity
    {
        protected override void OnCreate(Bundle bundle)
        {
            base.OnCreate(bundle);

            // Viser startsiden som er der etter login
            SetContentView(Resource.Layout.startingPage);
            
            // Deklarerer knappene som funksjoner
            Button messagesbtn = FindViewById<Button>(Resource.Id.MessageButton);
            Button myProfbtn = FindViewById<Button>(Resource.Id.myProfilebtn);
            Button myProjbtn = FindViewById<Button>(Resource.Id.myProjectsbtn);
            Button browsebtn = FindViewById<Button>(Resource.Id.browsebtn);

            // Kjører en funksjon når du trykker på en av knappene
            messagesbtn.Click += (object sender, EventArgs e) => {
                StartActivity(typeof(MessagesActivity));
            };
            myProfbtn.Click += (object sender, EventArgs e) => {
                StartActivity(typeof(MyProfActivity));
            };
            myProjbtn.Click += (object sender, EventArgs e) => {
                StartActivity(typeof(MyProjActivity));
            };
            browsebtn.Click += (object sender, EventArgs e) => {
                StartActivity(typeof(BrowseActivity));
            };
        }
    }
}