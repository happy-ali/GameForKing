<?
if( !User::isConnected()){//if not connected you can't see Profil 
        setAlert('warning','in order to play please sign in first');
        header('location: /home');
        exit(0);
    }
?>
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader"></div>
                <div class="avatar">
                    <img alt="" src="/profile-pictures/default-3.jpg">
                </div>
                <div class="info">
                    <div class="title">G4K guy</div>
                    <div class="desc">Stats</div>
                    <div class="desc">More stats...</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
      </div>
			<div class="col-lg-9 col-sm-6">
				in here we'll have his wall,posts and stuff
			</div>
	</div>
</div>
