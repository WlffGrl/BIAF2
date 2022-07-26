@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Horizontal Timeline</h4>

                    <div class="hori-timeline" dir="ltr">
                        <ul class="list-inline events">
                            <li class="list-inline-item event-list">
                                <div class="px-4">
                                    <div class="event-date bg-soft-primary text-primary">2 June</div>
                                    <h5 class="font-size-16">Event One</h5>
                                    <p class="text-muted">It will be as simple as occidental in fact it will be
                                        Occidental Cambridge friend</p>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item event-list">
                                <div class="px-4">
                                    <div class="event-date bg-soft-success text-success">5 June</div>
                                    <h5 class="font-size-16">Event Two</h5>
                                    <p class="text-muted">Everyone realizes why a new common language one could refuse
                                        translators.</p>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item event-list">
                                <div class="px-4">
                                    <div class="event-date bg-soft-danger text-danger">7 June</div>
                                    <h5 class="font-size-16">Event Three</h5>
                                    <p class="text-muted">If several languages coalesce the grammar of the resulting
                                        simple and regular</p>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item event-list">
                                <div class="px-4">
                                    <div class="event-date bg-soft-warning text-warning">8 June</div>
                                    <h5 class="font-size-16">Event Four</h5>
                                    <p class="text-muted">Languages only differ in their pronunciation and their most
                                        common words.</p>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection