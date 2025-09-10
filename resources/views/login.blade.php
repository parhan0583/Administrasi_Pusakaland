<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login dulu bang</title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'>
  <link rel="stylesheet" href="{{ asset('style/stylelogin.css') }}">
</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="wrapper">
    <div class="login_box">
      <div class="login-header">
        <span>Login</span>
      </div>
      @if (session('failed'))
      <div class="alert alert-danger">{{session('failed')}}</div>
      @endif
      <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <div class="input_box">
          <input type="email" name="email" id="user" class="input-field" placeholder=" " value="{{ old('email') }}" required>
          <label for="user" class="label">Email</label>
          <i class="bx bx-user icon"></i>
          @error('email')
          <small style="color:red;">{{ $message }}</small>
          @enderror
        </div>

        <div class="input_box">
          <input type="password" name="password" id="pass" class="input-field" placeholder=" " required>
          <label for="pass" class="label">Password</label>
          <i class="bx bx-hide icon" id="togglePassword" onclick="togglePasswordVisibility()"></i>
          @error('password')
          <small style="color:red;">{{ $message }}</small>
          @enderror
        </div>

        <div class="input_box">
          <input type="submit" class="input-submit" value="Login">
        </div>
      </form>
    </div>
  </div>


</body>
<script>
  function togglePasswordVisibility() {
    const passwordInput = document.getElementById('pass');
    const toggleIcon = document.getElementById('togglePassword');

    // Check the current type of the input field
    if (passwordInput.type === 'password') {
      // If it's a password, change it to text
      passwordInput.type = 'text';
      // Change the icon to 'show'
      toggleIcon.classList.remove('bx-hide');
      toggleIcon.classList.add('bx-show');
    } else {
      // If it's text, change it back to password
      passwordInput.type = 'password';
      // Change the icon to 'hide'
      toggleIcon.classList.remove('bx-show');
      toggleIcon.classList.add('bx-hide');
    }
  }
</script>

</html>