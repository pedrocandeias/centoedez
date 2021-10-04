(function() {
  var morphModal = document.getElementsByClassName('js-morph-img-modal');
  if(morphModal.length > 0) {
    var searchValues = [
      {id: 1, content: '<div class="text-component padding-md"><h1>Photo 1</h1><p class="color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequatur iusto maxime, facere saepe sunt quod optio praesentium. Sequi, placeat! Ratione soluta et necessitatibus dolorem.</p><p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora vitae quidem corrupti eos fuga quaerat beatae ducimus earum?</p></div>'},
      {id: 2, content: '<div class="text-component padding-md"><h1>Photo 2</h1><p class="color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequatur iusto maxime, facere saepe sunt quod optio praesentium. Sequi, placeat! Ratione soluta et necessitatibus dolorem.</p><p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora vitae quidem corrupti eos fuga quaerat beatae ducimus earum?</p></div>'},
      {id: 3, content: '<div class="text-component padding-md"><h1>Photo 3</h1><p class="color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequatur iusto maxime, facere saepe sunt quod optio praesentium. Sequi, placeat! Ratione soluta et necessitatibus dolorem.</p><p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora vitae quidem corrupti eos fuga quaerat beatae ducimus earum?</p></div>'},
      {id: 4, content: '<div class="text-component padding-md"><h1>Photo 4</h1><p class="color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequatur iusto maxime, facere saepe sunt quod optio praesentium. Sequi, placeat! Ratione soluta et necessitatibus dolorem.</p><p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora vitae quidem corrupti eos fuga quaerat beatae ducimus earum?</p></div>'},
      {id: 5, content: '<div class="text-component padding-md"><h1>Photo 5</h1><p class="color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequatur iusto maxime, facere saepe sunt quod optio praesentium. Sequi, placeat! Ratione soluta et necessitatibus dolorem.</p><p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora vitae quidem corrupti eos fuga quaerat beatae ducimus earum?</p></div>'},
      {id: 6, content: '<div class="text-component padding-md"><h1>Photo 6</h1><p class="color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequatur iusto maxime, facere saepe sunt quod optio praesentium. Sequi, placeat! Ratione soluta et necessitatibus dolorem.</p><p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora vitae quidem corrupti eos fuga quaerat beatae ducimus earum?</p></div>'},
      {id: 7, content: '<div class="text-component padding-md"><h1>Photo 7</h1><p class="color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequatur iusto maxime, facere saepe sunt quod optio praesentium. Sequi, placeat! Ratione soluta et necessitatibus dolorem.</p><p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora vitae quidem corrupti eos fuga quaerat beatae ducimus earum?</p></div>'}
    ];

    new MorphImgModal({
      element: morphModal[0],
      searchData: function(trigger, cb) {
        var imageId = trigger.getAttribute('data-morph-img') || 1;
        var data = searchValues.filter(function(item){
          return item['id'] == imageId;
        });
        cb(data[0]['content']);
      }
    });
  }
}());