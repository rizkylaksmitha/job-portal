<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kirim Email</title>
    
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            padding: 25px;
            border: 1px solid #ccc;
        }

        .title {
            font-size: 1.4rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 25px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #999;
            border-radius: 0;
            box-sizing: border-box;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #555;
            outline: none;
        }

        textarea.form-control {
            resize: vertical;
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid #000;
            background-color: #ddd;
            color: #000;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 0;
            transition: background-color 0.2s;
        }

        .btn-primary:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <div class="title">Kirim Email</div>
        
        <form action="{{ route('post-email') }}" method="post"> 
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Tujuan</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            
            <div class="form-group">
                <label for="subject">Subjek</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            
            <div class="form-group">
                <label for="body">Deskripsi</label>
                <textarea name="body" class="form-control" id="body" rows="6" required></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn-primary">Kirim Email</button>
            </div>

        </form>
    </div>

</body>
</html>