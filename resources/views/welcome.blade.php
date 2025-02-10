<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link rel="stylesheet" href="../../../landing-form/styles.css">
</head>
<body>
  <header>
    <div class="header-content">
      <nav class="auth-links">
        <a href="{{ route('login')}}" class="auth-btn">Log In</a>
        <a href="{{ route('register')}}" class="auth-btn">Sign Up</a>
        
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <h1>JC Appareal</h1>
      <p>Welcome to JC's Appareal.</p>
    </section>
  </main>
</body>
</html>
