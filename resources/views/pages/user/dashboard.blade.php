@extends('layouts.dashboard')

@section('title')
    My Dashboard
@endsection

@section('title.page')
    Dashboard
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
        {{-- <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Used Space</p>
                <h3 class="card-title">49/50
                    <small>GB</small>
                </h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">store</i>
                </div>
                <p class="card-category">Revenue</p>
                <h3 class="card-title">$34,245</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                </div>
                <p class="card-category">Fixed Issues</p>
                <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                </div>
                <p class="card-category">Followers</p>
                <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-success">
                <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                <h4 class="card-title">Daily Sales</h4>
                <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-warning">
                <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                <h4 class="card-title">Email Subscriptions</h4>
                <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-danger">
                <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                <h4 class="card-title">Completed Tasks</h4>
                <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-tabs card-header-primary">
                        <h4 class="card-title">Kursus yang Sedang Berlangsung</h4>
                        <p class="card-category">
                            Upgrade terus ilmu dan pengalaman
                            terbaru kamu di bidang teknologi
                        </p>
                        {{-- <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Tasks:</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                <a class="nav-link active" href="#profile" data-toggle="tab">
                                    <i class="material-icons">bug_report</i> Bugs
                                    <div class="ripple-container"></div>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#messages" data-toggle="tab">
                                    <i class="material-icons">code</i> Website
                                    <div class="ripple-container"></div>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#settings" data-toggle="tab">
                                    <i class="material-icons">cloud</i> Server
                                    <div class="ripple-container"></div>
                                </a>
                                </li>
                            </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <table class="table table-hover">
                                <thead class="text-primary">
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Terakhir Aktif</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                <tr data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>Hari ini</td>
                                    <td class="td-actions">
                                        <button type="button" rel="tooltip" title="Lanjutkan Belajar" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">library_books</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Batalkan Belajar" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <td>2</td>
                                    <td>Minerva Hooper</td>
                                    <td>Kemarin</td>
                                    <td class="td-actions">
                                        <button type="button" rel="tooltip" title="Lanjutkan Belajar" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">library_books</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Batalkan Belajar" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    <td>3</td>
                                    <td>Sage Rodriguez</td>
                                    <td>1 hari yang lalu</td>
                                    <td class="td-actions">
                                        <button type="button" rel="tooltip" title="Lanjutkan Belajar" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">library_books</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Batalkan Belajar" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                    <td>4</td>
                                    <td>Philip Chaney</td>
                                    <td>2 hari yang lalu</td>
                                    <td class="td-actions">
                                        <button type="button" rel="tooltip" title="Lanjutkan Belajar" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">library_books</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Batalkan Belajar" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="messages">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                                </td>
                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                </td>
                                <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                                </td>
                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="tab-pane" id="settings">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                                </td>
                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                                </td>
                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                </td>
                                <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                                </td>
                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                    <h4 class="card-title">Kursus yang di selesaikan</h4>
                    <p class="card-category">
                        Upgrade terus ilmu dan pengalaman
                        terbaru kamu di bidang teknologi
                    </p>
                    </div>
                    <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning text-center">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal Penyelesaian</th>
                        </thead>
                        <tbody class="text-center">
                        <tr data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>30 - 07 - 2021</td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>30 - 07 - 2021</td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>30 - 07 - 2021</td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>30 - 07 - 2021</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection