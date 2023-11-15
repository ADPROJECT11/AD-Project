<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">

<body>
  <div class="topbar">
    <div class="return"><a href=cusmenu><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a></div>
  </div>
  <div class="content">
    <div class="empp"></div>
    <div class="upperfont">
      <p id="login">Login</p>
      <p id="signin">Please sign in to continue</p>
    </div>
    <div class="empty2"></div>
    <div class="form">
      <form>
        <div>
          <p2>Username</p2><br />
          <div class="username">
            <img src="{{ asset('image/username.png')}}" width="35px" height="35px">
            <input type="text" required>
          </div>
        </div>
        <br />
        <div>
          <p2>Password</p2><br />
          <div class="password">
            <img src="{{ asset('image/password.png')}}" width="35px" height="35px">
            <input type="password" required>
          </div>
        </div>
        <div class="submit">
          <input type="submit" value="LOGIN">
        </div>
      </form>
    </div>
    <div class="prompt">Reminder: Customer no need to sign in</div>
    <div class="back"><a href=cusmenu>Press here back to menu</a></div>
  </div>
</body>

</html>