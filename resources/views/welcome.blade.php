<body style="background:#1a202c; color:white; display:flex; justify-content:center; align-items:center; height:100vh; font-family:sans-serif;">
    <form action="/login" method="POST" style="background:#2d3748; padding:30px; border-radius:10px; box-shadow:0 10px 25px rgba(0,0,0,0.5);">
        @csrf
        <h2 style="text-align:center;">WebSec Service</h2>
        <input type="email" name="email" placeholder="Email" required style="width:100%; padding:10px; margin:10px 0; border-radius:5px; border:none;">
        <input type="password" name="password" placeholder="Password" required style="width:100%; padding:10px; margin:10px 0; border-radius:5px; border:none;">
        <button type="submit" style="width:100%; padding:10px; background:#4a5568; color:white; border:none; border-radius:5px; cursor:pointer;">Secure Login</button>
    </form>
</body>