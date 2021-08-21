<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Launch demo modal
</button> -->

<!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title offset-md-3" id="exampleModalLabel">Events Registration Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" method="POST" action="/event">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="p_name" class="form-label">Participant's Name</label>
                                        <input type="text" class="form-control @error('p-name') is-invalid
                                        @enderror" id="p_name" name="p_name">
                                        @error('p_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="f_name" class="form-label">Father/Mother's Name</label>
                                        <input type="text" class="form-control @error('f_name') is-invalid
                                        @enderror" id="f_name" name="f_name">
                                        @error('f_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="school" class="form-label">School/College</label>
                                        <input type="text" class="form-control  @error('school') is-invalid
                                        @enderror" id="school" name="school">
                                        @error('school')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="p_age" class="form-label">Participant's age</label>
                                        <input type="number" class="form-control  @error('p_age') is-invalid
                                        @enderror" id="p_age" name="p_age" min="5" max="15" placeholder="5-15 years">
                                        @error('p_age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="p_contact" class="form-label">Contact</label>
                                        <input type="text" class="form-control @error('p_contact') is-invalid @enderror" id="p_contact" name="p_contact">
                                        @error('p_contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
