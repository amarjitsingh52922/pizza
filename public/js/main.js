var v=new Vue({
    el:'#app',
    delimiters: ['${', '}'],
    data:{
        items:[
            {message:'pizza1',qty:0,nprice:12.59},
            {message:'pizza2',qty:0,nprice:25.55},
            {message:'pizza3',qty:0,nprice:55.00},
        ],
        cartTotal:0,

    },
    methods: {
        increaseOrder: function(item) {
            item.qty++
            this.cartTotal+=item.nprice;
            this.saveCart();
        },
        decreaseOrder:  function(item) {
            item.qty--;
            this.cartTotal-=item.nprice;
            this.saveCart();
        },
        addToCart: function(item) {
            item.qty++;
            this.cartTotal+=item.nprice;
            this.saveCart();
        },
        saveCart:function() {
            const parsed=JSON.stringify(this.items);
            localStorage.setItem('cart',parsed);
        },
       recalculateCartTotal: function() {
           let sum=0;
           this.items.forEach(e => {
               sum+=e.qty*e.nprice;
           });
           this.cartTotal=sum;
       }
        
    },
    computed:{
        returnCartTotal:function() {
            return this.cartTotal.toFixed(2);
        },
        
        cartItems:function() {
            return this.items.filter(function(item) {
                return item.qty>0;
            })
        },
        
    },
    mounted(){
        if(localStorage.getItem('cart')) {
            try {
                this.items=JSON.parse(localStorage.getItem('cart'));
                let sum=0;
                this.items.forEach(e => {
                    sum+=e.qty*e.nprice;
                });
                this.cartTotal=sum;
            } catch(e) {
                localStorage.removeItem('cart');
            }
        }
    },
})