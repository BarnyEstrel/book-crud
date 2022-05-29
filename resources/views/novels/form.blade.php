<h1> add new novel</h1>
<form action="/store" method="POST">
    @csrf
    Name<input name="name">
    Description<input name="description">
    Genre<input name="genre">
    <button type="submit">Submit</button>
</form>