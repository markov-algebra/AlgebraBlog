<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Algebra Blog</title>
          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     </head>
     <body>
          <div class="container">
               @if(session()->has('flash_message'))
               <div class="alert alert-success alert-dismissible">
                    {{ session()->get('flash_message') }}
               </div>
               @endif
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title">Update korisnika</h3>
                    </div>

                    <div class="panel-body">
                         <form method="post" action="{{ route('users.update', $user->id) }}">
                              {{ method_field('PATCH') }}
                              {{ csrf_field() }}
                              <div class="form-group">
                                   <label for="naziv">Name</label>
                                   <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" />
                              </div>
                              <div class="form-group">
                                   <label for="email">Email</label>
                                   <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" />
                              </div>
                              <div class="form-group">
                                   <label for="password">Password</label>
                                   <input type="password" class="form-control" id="password" name="password" placeholder="Ukoliko ne želite mjenjati ostavite prazno">
                              </div>
                              <button type="submit" class="btn btn-primary">Uredi</button>
                              <a href="{{ route('users.index') }}" class="btn btn-danger" role="button">Odustani</a>
                         </form>
                    </div>
               </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
          <!-- Latest compiled and minified JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     </body>
</html>