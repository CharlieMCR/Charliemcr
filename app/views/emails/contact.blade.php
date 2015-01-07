<p>Date: {{ date("F j, Y, g:i a")}}</p>
<p>Name: {{ Input::get('name')}}</p>
<p>Email: {{ Input::get('email')}}</p>
<p>Message: {{ Input::get('message')}}</p>

<p>IP: {{ Request::getClientIp()}}</p>