@extends('layout.main')
@section('content')
<style type="text/css">
    .file {
        padding-bottom: 2rem !important;
        border: 1px dashed crimson !important;
    }
</style>
<div class="container page__container page-section pb-0">

    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">
            Assessment
        </li>
        <li class="breadcrumb-item active">
            Tools
        </li>
    </ol>
</div>


<div class="container page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Assesor Review Ethics Form</div>
    </div>
    <div class="col-md-1 col-12">
        <div class="flex" style="max-width: 100%">

            <nav aria-label="Page navigation example">
                {{ $listUS->links() }}
            </nav>

        </div>
    </div>

    <div class="dashboard-area-tabs p-relative o-hidden">
        <form action="/review" method="post">
            @csrf
            <div class="row">
                @foreach ($listUS as $us)
                <div class="col-md-12 col-12">
                    <div class="border rounded d-flex align-items-center p-16pt border-left-primary">
                        <div class="card-body text-70" style="min-width: 100%;">


                            <div class="list-group list-group-form"
                                style="box-shadow: none;border: none !important; min-width: 100%;">

                                @if (auth()->user()->role == 'learner')


                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Learner Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{auth()->user()->name}}{{auth()->user()->surname}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Learner ID
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{auth()->user()->identinty}}">
                                        </div>
                                    </div>
                                </div>
                                @else


                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Learner Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{session()->get('learner')->name}}{{session()->get('learner')->surname}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Learner ID
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{session()->get('learner')->identinty}}">
                                        </div>
                                    </div>
                                </div>

                                @endif

                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Unit Standard
                                        </label>
                                        <input name="us_id" type="hidden" class="form-control" value="{{$us->id}}">
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$us->us_name}}">
                                        </div>
                                    </div>
                                </div>


                                <hr>


                                <div class="list-group-item"
                                    style="border: none !important;border-top: 1px solid #e5e5e5 !important">
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q1" class="custom-control custom-select form-control">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q1_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q2" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q2_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q3" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q3_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q4" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q4_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q5" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q5_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q6" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q6_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q7" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q7_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q8" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q8_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q9" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q9_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="q10" class="custom-control custom-select form-control">

                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q10_comment" class="form-control"
                                                    placeholder="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-1">
                                    <div class="col-12">
                                        <label class="form-label col-form-label text-underline">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        </label>

                                        <div class="list-group-item">
                                            <div class="list-group-item" style="border: none !important;">
                                                <div class="form-group row align-items-center mb-0">

                                                    <div class="col-sm-6">
                                                        <label class="form-label col-form-label">
                                                            Assessor Signature
                                                        </label>
                                                        <input name="assessor_signature" type="text"
                                                            class="form-control" placeholder="signature" required>
                                                    </div>


                                                    <div class="col-sm-6">
                                                        <label class="form-label col-form-label">
                                                            Assessor Date
                                                        </label>
                                                        <input name="assessor_date" type="date" class="form-control"
                                                            placeholder="signature" required>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-12" style="border: none !important;">
                                            <div class="form-group row align-items-center mb-0">
                                                <div class="col-md-3"></div>
                                                <div class="col-sm-6">
                                                    <input type="submit" class="form-control btn btn-outline-secondary"
                                                        value="Save">
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>



                            </div>
                        </div>


                    </div>


                </div>
                @endforeach






            </div>
        </form>
    </div>

</div>






@endsection