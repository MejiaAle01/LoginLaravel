@extends('plantilla/plantilla')

@section('tituloPagina', 'Dashboard | Admin')

@section('contenido')
    <!-- START NAV -->
    <header class="container">
        <nav class="navbar is-white is-spaced has-shadow">
            <div class="navbar-brand">
                <div class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="#">
                        Home
                    </a>
                    <a class="navbar-item" href="#">
                        Orders
                    </a>
                    <a class="navbar-item" href="#">
                        Payments
                    </a>
                    <a class="navbar-item" href="#">
                        Exceptions
                    </a>
                    <a class="navbar-item" href="#">
                        Reports
                    </a>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <div class="dropdown has-text-left">
                                <div class="dropdown-trigger">
                                    <button class="button is-white" aria-haspopup="true" aria-controls="dropdown-menu3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-circle" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                        </svg>
                                        {{ $user->name }}
                                        <span class="icon is-small">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-chevron-down" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M6 9l6 6l6 -6" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                                    <div class="dropdown-content">
                                        <a href="{{ route('login.logout') }}" class="dropdown-item">
                                            <b class="has-text-danger"> Cerrar Sesión </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- END NAV -->
    <main class="container is-fluid">
        <div class="columns">
            <div class="column is-3 ">
                <aside class="menu is-hidden-mobile">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a class="is-active">Dashboard</a></li>
                        <li><a>Customers</a></li>
                        <li><a>Other</a></li>
                    </ul>
                    <p class="menu-label">
                        Administration
                    </p>
                    <ul class="menu-list">
                        <li><a>Team Settings</a></li>
                        <li>
                            <a>Manage Your Team</a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                                <li><a>Remove a member</a></li>
                            </ul>
                        </li>
                        <li><a>Invitations</a></li>
                        <li><a>Cloud Storage Environment Settings</a></li>
                        <li><a>Authentication</a></li>
                        <li><a>Payments</a></li>
                    </ul>
                    <p class="menu-label">
                        Transactions
                    </p>
                    <ul class="menu-list">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                        <li><a>Reports</a></li>
                    </ul>
                </aside>
            </div>
            <div class="column is-9">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="../">Bulma</a></li>
                        <li><a href="../">Templates</a></li>
                        <li><a href="../">Examples</a></li>
                        <li class="is-active"><a href="#" aria-current="page">Admin</a></li>
                    </ul>
                </nav>
                <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Hello, {{ $user->name }}.
                            </h1>
                            <h2 class="subtitle">
                                I hope you are having a great day!
                            </h2>
                        </div>
                    </div>
                </section>
                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">439k</p>
                                <p class="subtitle">Users</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">59k</p>
                                <p class="subtitle">Products</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">3.4k</p>
                                <p class="subtitle">Open Orders</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">19</p>
                                <p class="subtitle">Exceptions</p>
                            </article>
                        </div>
                    </div>
                </section>
                <div class="columns">
                    <div class="column is-6">
                        <div class="card events-card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Events
                                </p>
                                <a href="#" class="card-header-icon" aria-label="more options">
                                    <span class="icon">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </header>
                            <div class="card-table">
                                <div class="content">
                                    <table class="table is-fullwidth is-striped">
                                        <tbody>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                <td>Lorum ipsum dolem aire</td>
                                                <td class="level-right"><a class="button is-small is-primary"
                                                        href="#">Action</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <a href="#" class="card-footer-item">View All</a>
                            </footer>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Inventory Search
                                </p>
                                <a href="#" class="card-header-icon" aria-label="more options">
                                    <span class="icon">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-large" type="text" placeholder="">
                                        <span class="icon is-medium is-left">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        <span class="icon is-medium is-right">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    User Search
                                </p>
                                <a href="#" class="card-header-icon" aria-label="more options">
                                    <span class="icon">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-large" type="text" placeholder="">
                                        <span class="icon is-medium is-left">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        <span class="icon is-medium is-right">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection