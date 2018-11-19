<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     {{-- {% block link %} {% endblock %} --}}
@yield('link')
{{-- {% block style %}
{% endblock %} --}}
@yield('style')
 {{-- {% block title %} --}}
    <title>@yield('title')</title>
    {{-- {% endblock %} --}}
</head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{% url 'core:home' %}">Home <span class="sr-only">(current)</span></a>
        </li>
        {{-- {% if request.user.is_authenticated %}
        <li class="nav-item">
          <a class="nav-link" href="{% url 'account_logout' %}">Logout</a>
        </li>
        <li>
            <a class="nav-link" href="{% url 'post:home' %}">Post</a>
        </li>
        {% else %} --}}
        <li class="nav-item">
          <a class="nav-link" href="{% url 'account_signup' %}">SingIn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{% url 'account_login' %}">Login</a>
        </li>
        {{-- {% endif %} --}}
        <li class="nav-item dropdown align-items-end ">
   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Dropdown
   </a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
     <a class="dropdown-item" href="#">Action</a>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#">Something else here</a>
   </div>
 </li>
      </ul>

    </div>
  </nav>
  <div >
    @yield('body')
  </div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
{{-- {% block script %}{% endblock %} --}}
@yield('script')



  </body>
</html>
