Vue.component('coupon', {
template: `<div><input placeholder="Enter your code!" @blur="onCouponAppliedChild">

</div>
`,

methods: {
  onCouponAppliedChild() {
     this.$emit('applied');
  }
}
});


let help = new Vue({
  el: '#root',
data: {
  couponApplied : false
},
methods:{
  onCouponAppliedParent() {
    this.couponApplied = true;
     alert('hi');
  }
}

});
