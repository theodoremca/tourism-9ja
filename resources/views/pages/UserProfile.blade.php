@extends('layouts.app_blog')

@section('content')




<div class="wrapper">
    <div class="main">
        <div class="main-header">
            {{--<span class="title">User Profile</span>--}}
        </div>
    </div>

    <div class="profile">
        <div class="registration-form">
            <div class="form-contents">
                <div class="pic-container">
                    <i class="avatar"
                    ></i>
                    <span>Change Profile Picture</span>
                    <small>Tap to change</small>


                </div>
                <form action="" class="">
                    <div class="row">



                        <div class="form-group col-md-6 form-group-style" >
                            <label for="firstName">First Name</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter client first name"
                                required
                            />
                        </div>

                        <div class="form-group col-md-6 form-group-style">
                            <label for="lastName">Last Name</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter client last name"
                                required
                            />
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 form-group-style">
                            <label for="phone">Phone</label>
                            <input
                                class="form-control"
                                type="tel"
                                placeholder="Enter client phone number e.g. 08123456789"
                                required
                            />
                        </div>

                        <div class="form-group col-md-6 form-group-style">
                            <label for="email">Email</label>
                            <input
                                class="form-control"
                                type="email"
                                placeholder="Enter client email"
                                required
                            />
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 form-group-style">
                            <label for="country">Country</label>
                            <select
                                id="country"
                                name="country"
                                class="form-control lp_form"
                                style="color: #707981"
                                required
                            >
                                    <option selected disabled >Nigeria</option>
                                    <option id="nigeria" name="nigeria">Nigeria</option>
                                    <option id="usa" name="usa">USA</option>
                                    <option id="germany" name="germany">Germany</option>

                            </select>
                        </div>
                        <div class="form-group col-md-6 form-group-style">
                            <label for="state">State</label>
                            <select
                                id="state"
                                name="state"
                                class="form-control lp_form"
                                style="color: #707981"
                                required
                            >
                                <option selected disabled >Lagos</option>
                                <option id="lagos" name="lagos">Lagos</option>
                                <option id="fct" name="usa">FCT</option>
                                <option id="oyo" name="Oyo">Oyo</option>

                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 form-group-style">
                            <label for="city">City/Town</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter client city/town e.g. Ikeja"

                            />
                        </div>

                        <div class="form-group col-md-6 form-group-style">
                            <label for="streetAddress">Street Address</label>
                            <input
                                class="form-control"
                                type="address"
                                placeholder="Enter client street address e.g. 20 Felicia Koleoso Street"
                                required="true"
                            />
                        </div>

                    </div>
                    <div class="">
                        <div class="gender-role form-group-style">
                            <label for="gender">Gender</label>
                            <div class="gender-group">
                                <input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female" style="margin-left: 1rem;"> Female
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="save-changes">
                <button class="btn btn-success font-weight-bold">Save Changes</button>
            </div>

        </div>

    </div>
</div>

@endsection
