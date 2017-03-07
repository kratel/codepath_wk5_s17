# Project 5 - Encryption

Time spent: **X** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [x]  Required: Decrypt the government message
  * **Decrypted Message** 
  * I heard about your current situation. Do you know who hacked APEX? -- The Chairman
  * [x]  Required: Encrypt a response and include in this README
  * **Response Message**
  * DgoBUdgpSlXLn//SRbfXnt8ZJs3iesa9NcTXQGUCIPhOIEajqZkoCWBwU87FgZDubeRsE1s745RhxaClla8X0QZ/T5AMF8gVCIOyHDUShgRrB9ESk1R/vBaUuiHgi9OH

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
  * **Decrypted Message**
  * Cannot access APEX from this location. Send new agent codename and public key so I can contact. Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow
  * [x]  Required: Verify the message
  * [x]  Required: Include a response message in this README
  * To: sydneybristow
  * From: agent99
  * Subject: Encrypted and Signed Message
  * Body:

  * jfZbr9EFFjkt0VId7+8NTUzltC+r3tpO7oAbnK7PBL5MXH111NMzDsQ7txTkC1eV3I2synkNkAkJyTVkZ/wejIFpNQtymmXusqM8vEAgKUhohzFgv0SZaPVC2dcYECMiV0gDriBJjLTr6ELJfc8kQsNCNZWUz4BnIHUXtZFj58MVH5dHGvMWj9lMO9g/d6d7a62+wt3FTwfNtC8V88Lo8CLb+4GEZ7FZtbL9YPIn0BmiO9tWMZasWYSvtbxcz8rfIMK3ZrwOSenOUJ5Iqi2BC9k0t0IZXseFXoFSVNWOCMbD7npHrpfh8n0NOVqsGC9rXh943yPMLtizmu2vlXtrEg==

  * -----BEGIN PUBLIC KEY-----
  * MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2pO/kC0WF9JKeXLcQcoj
  * ggQvh8/sLPDTD7sJ4CEldjWwaU11BS7UxBdXKSrY/+eazhJQCbqpQVvfI/3/1Gon
  * YQ7GR9I2byKzSEfd+g/Nd4gpgMPs49pmCOMR9YlhuuxWUwlbtSY+S32Ctu/a+IBy
  * dYcWd+BDZwTYRcZGGrY3JJQmvSwO2XtAXFrI7HP48LxGuAVIPeUTA7bzbQupEmuN
  * GRV5RAEtuXy63wGgBf+nKoIFId6lBZqjDJ7xvii3ss4WxqRXVAafCu8VtrbbUdaL
  * ArtLcoE43djmU05YHyQN1GcQ27DbyYydgaPMGT+X0BGThRyMcKt7C48cqM1CrS6U
  * xQIDAQAB
  * -----END PUBLIC KEY-----

  * **Signature:**
  * S0bOvAGvY1c+IcdQJ5e4wzdwCHh7yYbWgUkbWoR2WoMPqCVTn9I/L9Z1Vw/6N/eNTOG9attYj2NbIEz40uQKeuJNekOQZdCbIhM4reQxySuHCJq+JrPq+cbGXKkn7L+2GaWDJiivT3AFN4i/knDVrdD8n5bf7GxeCmIAY6lvAySR9/paCOPfaMfHWHkofE2ZDnIvPJ2QWdsvgFj4uzOpn1I3jYnMLcOA+n7VyLc6yjs7UpgplPiqMySWJsy3hLGKpQM7wPq7dZbRseiVC2al68MH9YIOU18/jINP8K03J0InYOVySQCeu1AMY0BVqPu0FlhyTv8YRIGmSOGED4Qn7Q==

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible
  * [x]  Required: Identify the double agent: Natasha

The following objectives are **optional**:

* Bonus Objective 1\.
  * [x]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [x]  Write a report of your discoveries (longer than 300 characters).
  * [x]  Compose a secure email for sending over an insecure network.
  * [x]  Include the email with your encrypted report in this README.
  * To: APEX HQ
  * From: agent99
  * Subject: Encrypted and Signed Message

  * Instructions:
  * Decrypt Password with APEX HQ Private Key. Use that password to decrypt Body using AES-256-CBC.

  * Password needed for decryption (encrypted with Apex Public Key):
  * c5PatXJP2saT1j1y584kQBTzBJg1Dj1MSb+qegp1aYikbDp6GSeGh2K409RrxpOZr/LTwXWnJGq2bWglO9azkDeLT78N+Rnfx4X8aYGRLEzWL4ZB2ZQopGwLdJHH2flwe9Edq7pLBTKA3JMIEW9yHoUE3sQlMR1Rgmb6o42069+HbOhV3zDiCnXM5Ain7u33spF9Nc29V+yhnAOfrvsSKqirrqEZUY3Wx2UGPkc23BGIrCVbq0x7CS2WULpwcwsi7pwPxijnreYQ3iNw8qW0p1u8POVVd05GEjJX2iPDS1mXws4uztj71kYTgz3S6x8G+6tDerArz/uZrD8XDTOWTQ==

  * Signature for pass:
  * ndv3upfY9KZ7CJEXnar1CH/kX2xPFUus5LjKDf4Hux6eLDFsBEA1ASpsR+F0dTFFjSaIkVMxz3/INXfRU0w4Dj6BY7l+xH4aRZePhoYweJS166rQ52PR015az9e8mCGz92ykm3pS0qfTHVAfa/jIsdrBl/pQ6wfomryLPNiIiWWk9JzLEVyYpedNXiQ+fg1CUz4o041o1iZYPiIOMNIJXMlkWOZmO7EXrTfDO3EE8lOM1k5G5ge7kBoNaW/r6/IpIVK62LiTIqBe15xZIUFAnmXB0nWfg2qde0l4TcNoq/NZjcNM+KFcu0mAOsTR0TFYyc/htJuz7pLU+mvnE7jigg==

  * Body Encrypted using AES-256-CBC
  * with password above:
  * AriUPTau914TU+HgFKZXobuhcLKyp/xIy/sl9FNoH/fMQX0CesAAz/26uu8DeBy8BiSlOuH6zwtOY2HYRRNjXKhawneR1x4ZPGN9hd+kUB9HWmUVvMt7nLWXCcEGj/XtSWfqzcWhpDKZMypS0CGJ29NTu1l/aCkF2AfV73PZcDdcQe6+j3KQMZs4kK4pg8f3DkBlc2zvSkDD3bN+hCEcBdMmKwWnmLXk1B9i5YMRgQhucph7g08yQnITKRkIl53oqxgbO8nw5CW2HLB58NVo2EmnuQ2Ms0H4yaiwgLMiRwxEiUJE5V9Ljxc7T8QKYu8G2nRp5iXN+pT6lELOWnYU0+Ixgb0IvUdiU1uOp5gzWShqMdxS9w4/9txS+v/Kyc0Mv4q19DEz76Kbo+r7RsGXl3tDnT+nkNXpbGKzexb6LNUy5sVz0/gZzSpjlhN+XXsium8e3N48wJV+elpXR6uoH7TI6Ec9hq+DcH8yToUEVEIfo8muPe/PjMHq1P/R32ck

  * Signature for Body:
  * x/7mRBkmOgZG4O6cyVHzquhJo82cX7sSsWUBx6wk3ENBuis6pX+GaCRb6OpqqCtO3g3Dv1Zke1kwjoRTVWhLOQ508LO1lzmSj8bGZuIIxOvyQaEWgX46YGOD5axiNhKHPyt7GRBGKV96s1iGYLK0lCo7cacqUqj3e4Jxt5XYH/Fe6FvZj024hyK6ReCSV//+wK7m134QDFgR2iyPlGBxUuBjF/7f4jvLAOJm+vwbJCSqgxMT8axKkrRt7XuHwEg88TXePvRRDDBYYCO9xFBVzBjKGB5gCrBGlgUrEUDr4bdKFwb4IGOhYH/KFRMBTKjPbjznGj4OC2JN9xGE9TLozQ==


* Bonus Objective 3\.
  * [x]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [x]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/link/to/your/gif/file.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [Santiago Salas]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
