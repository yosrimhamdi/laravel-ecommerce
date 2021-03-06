<x-home.dashboard-base>
  <div class="body-content">
    <div class="container">
      <div
        class="sign-in-page"
        style="width: 50%;"
      >
        <h4 class="">Update Profile</h4>
        <form
          class="register-form outer-top-xs"
          method="POST"
          enctype="multipart/form-data"
          action="{{ route('profile.update') }}"
        >
          @csrf
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail2"
              style="width: 100%; display: block"
            >Email Address
              <input
                type="email"
                class="form-control unicase-form-control text-input"
                id="exampleInputEmail2"
                name="email"
                value={{ user()->email }}
              >
              <x-error input="email" />
          </div>
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Name</label>
            <input
              type="text"
              class="form-control unicase-form-control text-input"
              name="name"
              value="{{ user()->name }}"
            >
            <x-error input="name" />
          </div>
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Phone Number</label>
            <input
              type="text"
              class="form-control unicase-form-control text-input"
              name="phone"
              value="{{ user()->phone }}"
            >
            <x-error input="phone" />
          </div>
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Photo</label>
            <input
              type="file"
              class="form-control unicase-form-control text-input"
              name="photo"
              id="file-input"
              accept="image/*"
            >
            <x-error input="photo" />
          </div>
          <button
            type="submit"
            class="btn-upper btn btn-primary checkout-page-button"
          >Update Profile</button>
        </form>
      </div>
    </div>
  </div>
  <x-image-preview
    fileInputId="file-input"
    previewLocationId="user-photo"
  />
</x-home.dashboard-base>
