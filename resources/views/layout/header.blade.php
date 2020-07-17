<div class="container">
 <div class="row">
    <div class="col-12  d-flex align-items-center justify-content-between">
        <div>
        <form action="{{route('articles.index')}}" method ="get">
        <button class="btn btn-success" >Home</button>
        </form>
        </div>
        <div>
        <h1 class=" text-center text-dark">CRUD ARTICLES</h1>
        </div>
        <div>
        <form action="{{route('articles.create')}}" method="get">
            <button class="btn btn-primary">ADD NEW ARTICLE</button>
        </form>
    </div>
    </div>
 </div>    
</div>