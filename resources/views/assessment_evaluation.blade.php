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
        <div class="page-separator__text">Learner Assessment Evaluation</div>
    </div>

    <div class="dashboard-area-tabs p-relative o-hidden">

        <div class="row m-2">
            <div class="col-md-1 col-12">
                <div class="flex" style="max-width: 100%">

                    <nav aria-label="Page navigation example">
                        {{ $us->links() }}
                    </nav>

                </div>
            </div>
            @foreach ($us as $i)
            <div class="col-md-12 col-12">
                <div class="border rounded d-flex align-items-center p-16pt border-left-primary">
                    <div class="card-body text-70">

                        <form action="/assessment_evaluation" method="post">
                            @csrf
                            <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">

                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Learner Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{auth()->user()->name}}{{auth()->user()->surname}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Learner ID
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{auth()->user()->identinty}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Unit Standard Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$i->us_title}}">
                                        </div>
                                    </div>
                                </div>


                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Unit Standard Id</label>
                                        <div class="col-sm-9">
                                            <input name="us_id" type="text" class="form-control"
                                                value="{{$i->us_name}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Unit Standard Level</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$i->us_level}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                            Unit Standard Credit</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$i->us_credit}}">
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
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
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q10_comment" class="form-control"
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
                                                <select name="q11" class="custom-control custom-select form-control">
                                                    <option value="agree">Agree</option>
                                                    <option value="disagree">Disagree</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <textarea name="q11_comment" class="form-control"
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

                                                    <div class="col-sm-5">
                                                        <label class="form-label col-form-label">
                                                            Learner Signature
                                                        </label>
                                                        <input name="learner_signature" type="text" class="form-control"
                                                            placeholder="signature">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <label class="form-label col-form-label">
                                                            Learner Date
                                                        </label>
                                                        <input name="learner_date" type="date" class="form-control"
                                                            placeholder="Credit">
                                                    </div>

                                                    <div class="col-sm-5">
                                                        <label class="form-label col-form-label">
                                                            Assessor Signature
                                                        </label>
                                                        <input name="assessor_signature" type="text"
                                                            class="form-control" placeholder="signature">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <label class="form-label col-form-label">
                                                            Assessor Date
                                                        </label>
                                                        <input name="assessor_date" type="date" class="form-control"
                                                            placeholder="Credit">
                                                    </div>

                                                    <div class="col-sm-5">
                                                        <label class="form-label col-form-label">
                                                            Moderator Signature
                                                        </label>
                                                        <input name="moderator_signature" type="text"
                                                            class="form-control" placeholder="signature">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <label class="form-label col-form-label">
                                                            Moderator Date
                                                        </label>
                                                        <input name="moderator_date" type="date" class="form-control"
                                                            placeholder="Credit">
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

                        </form>

                    </div>
                </div>

            </div>
            @endforeach

        </div>





    </div>

</div>


</div>






@endsection