<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 20px;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            display: block;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        label {
            font-size: 14px;
            color: #666;
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        <h2>Edit Post: {{ $post->title }}</h2>
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br>
        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="{{ $post->description }}"><br>
        <label for="category">Category</label>
        <input type="text" id="category" name="category" value="{{ $post->category }}"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
