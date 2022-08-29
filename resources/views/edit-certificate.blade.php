<x-app>
<x-side-nav/>
<div class="container mt-3">
    <div class="card-header mb-3">
        <h4 class="text-uppercase">Update Certificate</h4>
    </div>
    <form action="/certificate/{{$certificate->id}})" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div class="">
                        {{$error}}
                    </div>
                @endforeach
            </div>
        @endif --}}
        
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputFirstName" value="{{ $certificate->first_name }}" name="first_name" type="text"/>
                    <label for="inputFirstName">First name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input class="form-control" id="inputLastName" name="last_name" type="text" value="{{ $certificate->last_name }}"/>
                    <label for="inputLastName">Last name</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputEmail" type="email" name="email" value="{{ $certificate->email }}"/>
            <label for="inputEmail">Email address</label>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputDate" name="course" type="text" value="{{ $certificate->course }}"/>
                    <label for="inputPassword">Course</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="inputDate" name="date" type="date" value="{{ $certificate->date }}"/>
                    <label for="inputPasswordConfirm">Date</label>
                </div>
            </div>
            <div class="form- mb-2">
                <label class="text-muted" for="passport" style="cursor:pointer;">
                    <b>Passport photograph: <span class="text-danger">required field</span> </b>
                    <img id="image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAMAAABjGQ9NAAAAOVBMVEWVu9////+QuN7z9/uLtdz6/P3m7vfH2u22z+jh6/Xt8/mavuCfweLU4vHQ4PCxzOemxeTA1evZ5vJjZrBAAAADaUlEQVRoge2bi26rMAyGE2MSSCgJvP/DjmtXVi42dYrOEb+0SauqfcOO49uq1K1bt24tBIDKV728QoBvgn2ojcvyXpkzdfBfwgMUpf6rsvgCHdDmb+ReucXEdAzr5IEeMCUaHpvkXo+UT/7u6D9uT0aGI3QHT/TkuG/wyexJfA4FAa11keTJSWitE5BJFk9kdSCitRY3Olgy20rDISOzM2l2JKO1rmTRDJNrXcs+OOFK+5Xw5ebp7u4c7kXZFQMt7XDOUdM6SqKBxw6SDifmkVmi+QQaFrv5b577QrYKLHaQRF8ZY5feLX67JXhXLnunKsdgO1n0lXnsoBlaSrg1YgW4dInuGWzho3ZprQgtmd2Ks+mZTDSLjSKzxckKqQ7PEvRj1ApdvCVS9HQi3JUMQkNCmySDB1r9IFs3zEJKLnNphj1AeXDR0vwVft2Mi1K1pTjkow5jPEVszzqIszTx9YTv3awJbtOltuFZYnKnLbObpNTpINWr6HrxHmEwxKkogPB+wbnpToEmii9OAGN3sdTTYcKwNLyZtxXY2aSMkosTQGXHI9bi85WiLl2e566sCzXDcCzqMqtk8IBV82tj93Qo9MLh+/zKS+PkmupjPPjCLNrAfGsRBlAs32gK/wkdZlsvnbtCBwjvsdfZ/jQd4vpFYoJa4LsfivWoz+JJ+E4PlrdNBYg4fMWm3e7Oz/Vmh6VC7owx7mgocKqYqDijhp2/8ERKR063v6eSn914U609sStXYjVOEbui4PT6R2LOAlj7kSMxqzhy10kRs5aSNDnT6Mx5+ZFYkwjGdIUi3gRG0t3MClbW3SyHkzpOjhgJRTS6ezEiXCyPzOLkE860nCLGRJ21JaCIsUngbWYoIm9vmNswishlm/gxZxx08WPOOOggfcw5YzfZ27wX+UYXqo5fRa6U5UOMHmTSmaQXsVBOEN7kABcumEYRy6YEVwv5coH1IdZnIv6PE2vvShVxP3sp+0KbXxnf0p1BL3p3AI1sJnOcpghUbKWSWdZG7pgNfRDAZ23wZ7YJgCrYwxnWtnJnwydD3YF/ZvRiPuP+8rEqakM1QG7qokLBGfowqg62Nbt7ItPaoF6m2oIafqmPwT5K41yW9R8w6b47Z8qHDdFP70gp6JzQMcaP1fQfrBln+Gmht27d+rf0A9LrJqGOTbjfAAAAAElFTkSuQmCC" id="imgPreviewEl" class="img-thumbnail w-50 my-3 passport" >
                </label>
                <input type="file" class="form-control shadow-sm border-1 form-control-lg-file d-none" name="image" id="passport">
                <img src="{{asset($certificate->image ? asset('storage/' . $certificate->image) : asset('asset/img/no-image.png'))}}" class="passport" alt="user1">
            </div>
            
        </div>
        <div class="mt-3 mb-0">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </div>
    </form>
</div>
</x-app>
