Date:
{{ date("F j, Y, g:i a")}}
Name:
{{ Input::get('name')}}
Email:
{{ Input::get('email')}}
Message:
{{ Input::get('message')}}

IP:
{{ Request::getClientIp()}}