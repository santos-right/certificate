<x-app>
<x-side-nav/>
<div class="container mt-3">
    <div class="card-header mb-3">
        <h4 class="text-uppercase">Add New Certificate</h4>
    </div>
    <x-flash-message/>
    <form action="{{ route('certificate') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputFirstName" name="first_name" value="{{old('first_name')}}" type="text" placeholder="Enter your first name" />
                    <label for="inputFirstName">First name</label>
                    @error('first_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input class="form-control" id="inputLastName" name="last_name" value="{{old('last_name')}}" type="text" placeholder="Enter your last name" />
                    <label for="inputLastName">Last name</label>
                    @error('last_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputEmail" type="email" value="{{old('email')}}" name="email" placeholder="name@example.com" />
            <label for="inputEmail">Email address</label>
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputDate" name="course" value="{{old('course')}}" type="text" placeholder="Course" />
                    <label for="inputPassword">Course</label>
                    @error('course')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputDate" name="date" value="{{old('date')}}" type="date" placeholder="Date" />
                    <label for="inputPasswordConfirm">Date</label>
                    @error('date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="form- mb-2">
                <label class="text-muted" for="passport" style="cursor:pointer;">
                    <b>Passport photograph: <span class="text-danger">required field</span> </b>
                    <img id="image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAMAAABjGQ9NAAAAOVBMVEWVu9////+QuN7z9/uLtdz6/P3m7vfH2u22z+jh6/Xt8/mavuCfweLU4vHQ4PCxzOemxeTA1evZ5vJjZrBAAAADaUlEQVRoge2bi26rMAyGE2MSSCgJvP/DjmtXVi42dYrOEb+0SauqfcOO49uq1K1bt24tBIDKV728QoBvgn2ojcvyXpkzdfBfwgMUpf6rsvgCHdDmb+ReucXEdAzr5IEeMCUaHpvkXo+UT/7u6D9uT0aGI3QHT/TkuG/wyexJfA4FAa11keTJSWitE5BJFk9kdSCitRY3Olgy20rDISOzM2l2JKO1rmTRDJNrXcs+OOFK+5Xw5ebp7u4c7kXZFQMt7XDOUdM6SqKBxw6SDifmkVmi+QQaFrv5b577QrYKLHaQRF8ZY5feLX67JXhXLnunKsdgO1n0lXnsoBlaSrg1YgW4dInuGWzho3ZprQgtmd2Ks+mZTDSLjSKzxckKqQ7PEvRj1ApdvCVS9HQi3JUMQkNCmySDB1r9IFs3zEJKLnNphj1AeXDR0vwVft2Mi1K1pTjkow5jPEVszzqIszTx9YTv3awJbtOltuFZYnKnLbObpNTpINWr6HrxHmEwxKkogPB+wbnpToEmii9OAGN3sdTTYcKwNLyZtxXY2aSMkosTQGXHI9bi85WiLl2e566sCzXDcCzqMqtk8IBV82tj93Qo9MLh+/zKS+PkmupjPPjCLNrAfGsRBlAs32gK/wkdZlsvnbtCBwjvsdfZ/jQd4vpFYoJa4LsfivWoz+JJ+E4PlrdNBYg4fMWm3e7Oz/Vmh6VC7owx7mgocKqYqDijhp2/8ERKR063v6eSn914U609sStXYjVOEbui4PT6R2LOAlj7kSMxqzhy10kRs5aSNDnT6Mx5+ZFYkwjGdIUi3gRG0t3MClbW3SyHkzpOjhgJRTS6ezEiXCyPzOLkE860nCLGRJ21JaCIsUngbWYoIm9vmNswishlm/gxZxx08WPOOOggfcw5YzfZ27wX+UYXqo5fRa6U5UOMHmTSmaQXsVBOEN7kABcumEYRy6YEVwv5coH1IdZnIv6PE2vvShVxP3sp+0KbXxnf0p1BL3p3AI1sJnOcpghUbKWSWdZG7pgNfRDAZ23wZ7YJgCrYwxnWtnJnwydD3YF/ZvRiPuP+8rEqakM1QG7qokLBGfowqg62Nbt7ItPaoF6m2oIafqmPwT5K41yW9R8w6b47Z8qHDdFP70gp6JzQMcaP1fQfrBln+Gmht27d+rf0A9LrJqGOTbjfAAAAAElFTkSuQmCC" id="imgPreviewEl" class="img-thumbnail w-50 my-3 passport" >
                </label>
                <input type="file" class="form-control shadow-sm border-1 form-control-lg-file d-none" value="{{old('image')}}" name="image" id="passport">
                @error('image')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            
        </div>
        <div class="mt-3 mb-0">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </form>
</div>
</x-app>
