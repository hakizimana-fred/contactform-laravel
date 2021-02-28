<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <h1>Contacts us</h1>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name </label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>


            <div class="form-group">
                <label for="name" class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="3" id="message" placeholder="Enter message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</body>

</html>