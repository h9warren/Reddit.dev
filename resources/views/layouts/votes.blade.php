<form method="POST" action="{{ action('PostsController@vote', $post->id) }}">
{{ csrf_field() }}
<button type="submit" name="vote" value='1'><span class="glyphicon glyphicon-arrow-up"></span></button>
<button type="submit" name="vote" value='-1'><span class="glyphicon glyphicon-arrow-down"></span></button>
</form>