<div class="col-md-6">
			<h3> Sign UP</h3>
			<form action="{{ Route('signup') }}" method="post">
				
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Your First Name</label>
					<input type="text" name="username" class="form-control" placeholder="User Name" value="{{ Request::old('username') }}" required/>
				</div>
				
				<div class="form-group">
					<label for="password">Your Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" value="{{ Request::old('password') }}" required/>
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
				<!--<input type="hidden" name="_token" value="{{ Session::token() }}">-->
			</form>
		</div>