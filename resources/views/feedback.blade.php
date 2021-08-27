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
        <div class="page-separator__text">Feedback</div>
    </div>

    <div class="dashboard-area-tabs p-relative o-hidden">

        <div class="row m-2">
            <div class="col-md-1 col-12">
                <div class="flex" style="max-width: 100%">

                    <nav aria-label="Page navigation example">
                        {{ $listUS->links() }}
                    </nav>

                </div>
            </div>


            @foreach ($listUS as $i)

            <div class="col-md-12 col-12">
                <div class="border rounded d-flex align-items-center p-16pt border-left-primary">
                    <div class="card-body text-70">


                        <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                            @if (auth()->user()->role == 'learner')
                            <div class="list-group-item" style="border: none !important;">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-3">
                                        Learner Name
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{auth()->user()->name}} {{auth()->user()->surname}}">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item" style="border: none !important;">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-3">
                                        Identity Number
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{auth()->user()->identinty}}">
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
                                            value="{{session()->get('learner')->name}} {{session()->get('learner')->surname}}">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item" style="border: none !important;">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-3">
                                        Identity Number
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
                                        <input type="text" class="form-control" value="{{$i->us_name}}">
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
                            <form action="/feedback" method="post">
                                @csrf
                                <input name="us_id" type="hidden" class="form-control" value="{{$i->id}}">
                                @if (auth()->user()->role == 'learner')
                                <input name="user_id" type="hidden" class="form-control" value="{{auth()->user()->id}}">
                                @else
                                <input name="user_id" type="hidden" class="form-control"
                                    value="{{session()->get('learner')->id}}">
                                @endif


                                @foreach ($us as $u)
                                @if($u->us_id == $i->id)
                                <div class="list-group-item"
                                    style="border: none !important;border-top: 1px solid #e5e5e5 !important">
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Attempt</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="attempt"
                                                    class="custom-control custom-select form-control">
                                                    <option value="{{$u->attempt}}">{{$u->attempt}}
                                                    </option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Knowledge Questionare</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="knowledge_questionare"
                                                    class="custom-control custom-select form-control">
                                                    <option value="{{$u->knowledge_questionare}}">
                                                        {{$u->knowledge_questionare}}</option>
                                                    <option value="Competent">Competent</option>
                                                    <option value="Not Yet Competent">Not Yet Competent</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Pratical Questionare</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="practical_questionare"
                                                    class="custom-control custom-select form-control">
                                                    <option value="{{$u->practical_questionare}}">
                                                        {{$u->practical_questionare}}</option>
                                                    <option value="Competent">Competent</option>
                                                    <option value="Not Yet Competent">Not Yet Competent</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Overall</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="overall"
                                                    class="custom-control custom-select form-control">
                                                    <option value="{{$u->overall}}">{{$u->overall}}
                                                    </option>
                                                    <option value="Competent">Competent</option>
                                                    <option value="Not Yet Competent">Not Yet Competent</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Comment</label>
                                            <div class="col-sm-12 col-12">

                                                <textarea name="comments" class="form-control"
                                                    placeholder="comment">{{$u->comments}}</textarea>

                                            </div>
                                        </div>


                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Learner Action Plan</label>

                                            <div class="col-sm-12 col-12">
                                                <textarea name="action_plan" class="form-control"
                                                    placeholder="comment">{{$u->action_plan}}</textarea>
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
                                                            <input name="learner_signature" type="text"
                                                                class="form-control" placeholder="signature"
                                                                value="{{$u->learner_signature}}">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label class="form-label col-form-label">
                                                                Learner Date
                                                            </label>
                                                            <input name="learner_date" type="date" class="form-control"
                                                                value="{{$u->learner_date}}">
                                                        </div>

                                                        <div class="col-sm-5">
                                                            <label class="form-label col-form-label">
                                                                Assessor Signature
                                                            </label>
                                                            <input name="assessor_signature" type="text"
                                                                class="form-control" placeholder="signature"
                                                                value="{{$u->assessor_signature}}">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label class="form-label col-form-label">
                                                                Assessor Date
                                                            </label>
                                                            <input name="assessor_date" type="date" class="form-control"
                                                                value="{{$u->assessor_date}}">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        @if (auth()->user()->role == 'learner' || auth()->user()->role == 'assessor')
                                        <div class="col-lg-12" style="border: none !important;">
                                            <div class="form-group row align-items-center mb-0">
                                                <div class="col-md-3"></div>
                                                <div class="col-sm-6">
                                                    <input type="submit" class="form-control btn btn-outline-secondary"
                                                        value="Save">
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                    </div>

                                </div>
                            
                                @else
                                <div class="list-group-item"
                                    style="border: none !important;border-top: 1px solid #e5e5e5 !important">
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Attempt</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="attempt"
                                                    class="custom-control custom-select form-control">

                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Knowledge Questionare</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="knowledge_questionare"
                                                    class="custom-control custom-select form-control" required>
                                                    <option value="">Choose.......</option>
                                                    <option value="Competent">Competent</option>
                                                    <option value="Not Yet Competent">Not Yet Competent</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Pratical Questionare</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="practical_questionare"
                                                    class="custom-control custom-select form-control" required>
                                                    <option value="">Choose ......</option>
                                                    <option value="Competent">Competent</option>
                                                    <option value="Not Yet Competent">Not Yet Competent</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Overall</label>
                                            <div class="col-sm-2 col-12">
                                                <select name="overall" class="custom-control custom-select form-control"
                                                    required>
                                                    <option value="">Choose .......
                                                    </option>
                                                    <option value="Competent">Competent</option>
                                                    <option value="Not Yet Competent">Not Yet Competent</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="list-group-item"
                                        style="border: none !important;border-bottom: 1px solid #e5e5e5 !important">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Comment</label>
                                            <div class="col-sm-12 col-12">

                                                <textarea name="comments" class="form-control" required
                                                    placeholder="comment"></textarea>

                                            </div>
                                        </div>


                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-7 col-12">
                                                Learner Action Plan</label>

                                            <div class="col-sm-12 col-12">
                                                <textarea name="action_plan" class="form-control" required
                                                    placeholder="comment"></textarea>
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
                                                            <input name="learner_signature" type="text"
                                                                class="form-control" placeholder="signature">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label class="form-label col-form-label">
                                                                Learner Date
                                                            </label>
                                                            <input name="learner_date" type="date" class="form-control">
                                                        </div>

                                                        <div class="col-sm-5">
                                                            <label class="form-label col-form-label">
                                                                Assessor Signature
                                                            </label>
                                                            <input name="assessor_signature" type="text"
                                                                class="form-control" placeholder="signature" required>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label class="form-label col-form-label">
                                                                Assessor Date
                                                            </label>
                                                            <input name="assessor_date" type="date" class="form-control"
                                                                required>
                                                        </div>

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

                                @endif
                                @endforeach





                            </form>


                        </div>
                    </div>


                </div>


            </div>
            @endforeach


        </div>

    </div>

</div>






@endsection