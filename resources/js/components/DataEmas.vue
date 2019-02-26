<template>
	<div class="container">
    <div class="row">
      <div class="right-align"><h6> <router-link :to="{ name: 'home' }" class="grey-text">Home</router-link> / Data Emas</h6></div>
      <!-- Modal Trigger -->
      <a class="waves-effect waves-light orange darken-3 btn modal-trigger" href="#dataemas">Tambah Data</a>
      <table class="striped highlight">
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<!--  <form @submit.prevent="subscribe" class="form-subscribe" method="post" action="/nawala/langganan">
    <div class="input-group">
        <input :disabled="loading" v-model="email" type="text" name="email" class="form-control input-lg" placeholder="Alamat pos-el kamu">
        <span class="input-group-btn">
        <button :disabled="loading" class="btn btn-success btn-lg" type="submit">
            <i v-if="loading" class="fa fa-spin fa-spinner"></i>
            Berlangganan
        </button>
        </span>
    </div>
</form> -->
</template>