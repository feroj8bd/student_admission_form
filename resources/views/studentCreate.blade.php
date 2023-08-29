<!DOCTYPE html>

<html>

<head>
    <title>Practies_project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-5">Admission Form</h4>
        <form action="{{ route('student.store') }}" method="POST">
            @csrf
            {{-- name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="name" class="form-label">Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="col-md-4">
                    @error('name')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- father name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="name" class="form-label">Father Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="father_name" class="form-control" id="father_name">
                </div>
                <div class="col-md-4">
                    @error('father_name')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- mother name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="mother_name" class="form-label">Mother Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="mother_name" class="form-control" id="mother_name">
                </div>
                <div class="col-md-4">
                    @error('mother_name')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- date of birth --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="date" class="form-label">Date of Birth :</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="date_of_birth" class="form-control" id="date">
                </div>
                <div class="col-md-4">
                    @error('date_of_birth')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- phone number --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="phone" class="form-label">Phone Number :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="phone_number" class="form-control" id="phone">
                </div>
                <div class="col-md-4">
                    @error('phone_number')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- email --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="mail" class="form-label"> Email :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="email" class="form-control" id="mail">
                </div>
                <div class="col-md-4">
                    @error('email')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- nationality --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="country" class="form-label"> Nationality :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="nationality" class="form-control" id="country">
                </div>
                <div class="col-md-4">
                    @error('nationality')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- subject --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="subject" class="form-label">Subject:</label>
                </div>
                <div class="col-md-4">
                    <select class=" form-select" name="subject" id="subject">
                        <option selected disabled> Subject</option>
                        <option value="cse">CSE</option>
                        <option value="bba">BBA</option>
                        <option value="mba">MBA</option>
                    </select>
                </div>
                <div class="col-md-4">
                    @error('subject')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- gender --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="subject" class="mt-3"> Gender :</label>
                </div>
                <div class="col-md-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                            value="male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                            value="female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                            value="other">
                        <label class="form-check-label" for="inlineRadio3">Other</label>
                    </div>

                    <div class="mt-3">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    @error('gender')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

        </form>
    </div>


</body>

</html>
