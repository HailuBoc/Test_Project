<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            text-align: center;
            background: white;
            padding: 60px 40px;
            border-radius: 10px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
        }
        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .info {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: left;
        }
        .info p {
            margin: 10px 0;
            font-family: monospace;
            font-size: 0.95em;
        }
        .links {
            margin-top: 30px;
        }
        a {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        a:hover {
            background: #764ba2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Laravel is Running!</h1>
        <p>Your Laravel application is successfully set up and running.</p>
        
        <div class="info">
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Environment:</strong> <?php echo $_ENV['APP_ENV'] ?? 'local'; ?></p>
            <p><strong>Debug Mode:</strong> <?php echo $_ENV['APP_DEBUG'] ?? 'false'; ?></p>
            <p><strong>Timestamp:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
        
        <p>Start building your application by creating controllers, models, and routes.</p>
        
        <div class="links">
            <a href="/api/user">API Endpoint</a>
        </div>
    </div>
</body>
</html>
// Commit 32 - 2022-04-06 19:10:55
