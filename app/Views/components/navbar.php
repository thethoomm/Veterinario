<style>
    .navbar {
        background-color: #047857;
    }
    
    .navbar * {
        color: #fafafa;
        text-decoration: none;
    }
</style>

<nav class="navbar py-2 d-flex">
    <ul class="nav m-auto d-flex justify-content-around w-75 h-100">
        <li class="nav-item">
            <a class="nav-link active d-flex justify-content-center align-items-center flex-column" href="<?= $GLOBALS['baseURL']?>/pedidos/novo">
                <i class="bi bi-cart-plus"></i>
                <p>Novo Pedido</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active d-flex justify-content-center align-items-center flex-column" href="<?= $GLOBALS['baseURL']?>/pedidos/novo">
                <i class="bi bi-box-seam"></i>
                <p>Consultar Pedidos</p>
            </a>
        </li>
    </ul>
</nav>