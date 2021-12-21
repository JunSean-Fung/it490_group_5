<div class="container-fluid">
        <div class="row">
            <div class=" Jumbotron p-3 p-md-5 d-flex align-items-center text-white bg-dark">
                <div>
                    <h1>Every Road to riches start with a search</h1>
                </div>
                <!-- Search Bar -->
                <div class="col-md-12">
                    <div class="search-2"> 
                        <i class='bx bxs-map'></i> 
                        <input type="text" placeholder="San Francisco,USA"> 
                        <button>Search</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Table with search result from the API data -->
    <table class="table table-bordered" style="margin-top:20px">
        <h1>Top Five Crypto</h1>
        <thead>            
            <th scope="col">Name</th>
            <th scope="col">Symbol</th>
            <th scope="col">Price</th>
        </thead>
        <tbody id="data">
    </table>    