<?php 
print_r($_POST);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>International Telephone Input</title>
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
</head>

<body>
  <h1>International Telephone Input</h1>
  <form method="post">
    <input id="phone" name="phone" type="tel">
    <button type="submit">Submit</button>
  </form>

  <!-- Load jQuery from CDN so can run demo immediately -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="build/js/intlTelInput.js"></script>
  <script>
      
    $("#phone").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      hiddenInput: "full_number",
      initialCountry: "BD",
      nationalMode: false,
      placeholderNumberType: "MOBILE",
      separateDialCode: true,
      utilsScript: "build/js/utils.js"
    });
  </script>
</body>

</html>
