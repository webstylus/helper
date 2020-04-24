### Helpers

Require bootstrap 4.4.1 min 
Optional font awesome 5.13.0 min

##### Mix helpers to help

    * mix_url
    * isActive
    * messages
    * listDir

###### mix_url:
this function to create base url with laravel mix compilation

###### isActive:
this function to add a css class to code is a link active or not

###### messages:
this function to create messages using types class of bootstrap in your sessions

<small>How to use messages before request with errors:</small>

    All messages from session:
    
    @include('helper::partials.session_message')

or

    Message to input especific:
    
    <div class="col-12 col-md-6">
        <div class="form-group">
         <label for="first_name" class="required">First Name</label>
         <input type="text" name="first_name" id="first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}">
         <span class="d-block">@include('helper::partials.invalid_message', ['input' => 'first_name'])</span>
        </div>
    </div>    

<small>How to use messages create with Helper::message(...):</small>

    include before call js bootstrap:
    
    @include('helper::partials.notify_message')
    

    Call this funcition with types = success, primary, info, warning or danger:
    
    Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'success', 2000);
    Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'primary', 3000);
    Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'info', 4000);
    Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'warning', 5000);
    Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'danger', 6000);

###### listDir:
this function to list files in determinate directory

