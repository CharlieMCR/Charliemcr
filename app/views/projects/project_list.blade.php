<h2>Projects</h2>
@foreach($projects as $key => $value)
    <div class="project-item">
    <a href="{{route('projects.show', $value->name)}}">
        <p>{{ str_limit($value->description, $limit = 440, $end = '...') }}</p>
        <img src="/img/projects/{{ $value->img }}" alt="{{ $value->img }}">
    </a>
    <p>{{ $value->name }}</p>
    </div>
@endforeach