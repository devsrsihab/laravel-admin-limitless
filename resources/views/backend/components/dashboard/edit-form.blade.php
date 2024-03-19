    <!-- edit form -->
    <div class="card px-4">
        <div class="card-header">
            <h5 class="mb-0">Basic layout</h5>
        </div>

        <div class="card-body border-top">
            <form action="#">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" class="form-control" placeholder="Your strong password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Your state:</label>
                    <select class="form-control form-control-select2">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="KY">Kentucky</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                        </optgroup>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender:</label>
                    <div>
                        <label class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" checked>
                            <span class="form-check-label">Male</span>
                        </label>

                        <label class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender">
                            <span class="form-check-label">Female</span>
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Your avatar:</label>
                    <input type="file" class="form-control">
                    <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Your message:</label>
                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /edit form -->