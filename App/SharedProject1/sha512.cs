using System;
using System.Collections.Generic;
using System.IO;
using System.Security.Cryptography;
using System.Text;

namespace SharedProject1
{
   public class sha512
    {

		private string hashData;
		public sha512(string password)
		{
			UnicodeEncoding UE = new UnicodeEncoding();
			byte[] message = UE.GetBytes(password);
			SHA512Managed hashString = new SHA512Managed();
			string hexNumber = "";
			byte[] hashValue = hashString.ComputeHash(message);
			foreach (byte x in hashValue)
			{
				hexNumber += String.Format("{0:x2}", x);
			}
			hashData = hexNumber;
		}
		public string GetHashData()
		{
			return hashData;

		}
	}
}
