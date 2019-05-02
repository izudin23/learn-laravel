@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name') ?? $customer->name}}">
    {{ $errors->first('name') }}
</div>
<div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email" value="{{old('email') ?? $customer->email}}">
    {{ $errors->first('email') }}
</div>
<div class="form-group">
    <label for="status">Status</label>
    <select class="custom-select" name="status">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select class="custom-select" name="company_id">
        @foreach($companies as $company)
        <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </select>
</div>