
<section >
    <header class="d-flex align-items-center justify-content-between p-3 bg-light border-bottom">
        <div class="logo d-flex align-items-center">
            <img src="/images/logo.png" alt="Logo" class="me-2" style="width: 70px; height: auto;">
            <h2 class="m-0">CHUCHU STUDIO</h2>
        </div>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="fa-solid fa-magnifying-glass" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <form action="" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </header>
</section>