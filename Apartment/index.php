<html>
<head>
    <title>Manage Apartment</title>
    <link rel="stylesheet" href="/apartment/style.css">
</head>
<body>
     <div class="banner">
     <div class="navbar">
        <image src="/images/logo.jpg" class="logo">
           <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign up</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
            
            </ul>
        </div>
        <div class="details">
          <div class="hed"><h1>Apartment Details</h1></div>
            
              <table>
                <tr>
                  <td class="heading">Apartment ID:</td>
                  <td class="info"><input type="text" name="FullName" id="FullName"  class="cat_textbox" maxlength="255" /></td>
                </tr>
                
                        <tr>
                  <td class="heading">StreetName:</td>
                  <td class="info"><input type="text" name="HomeAddress" id="HomeAddress"  class="cat_textbox" maxlength="500" /></td>
                </tr>
                       <tr>
                  <td class="heading">Town:</td>
                  <td class="info"><input type="text" name="HomeCity" id="HomeCity"  class="cat_textbox" maxlength="255" /></td>
                </tr>
                
                 <tr>
                  <td class="heading">Postal Code:</td>
                  <td class="info"><input type="text" name="HomeState" id="HomeState"  class="cat_textbox" maxlength="255" /></td>
                </tr>
                 <tr>
                  <td class="heading">Rooms:</td>
                  <td class="info"> <input type="text" name="rooms" id="rooms"  class="cat_textbox" maxlength="255" /></td>
                </tr>
                    <tr>
                  <td class="heading">Device Type:</td>
                  <td class="info"><input type="text" id="device" name="devicetype"  class="cat_textbox" /></td>
                </tr>
              </table>
              
            </div>
     
     <div>
        <button type="button"><span></span>Save Apartment</button>
       
    </div>
</body>
</html>