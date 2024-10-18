var tags = new Bloodhound({
  prefetch: {
    url: '/tags',
    cache: false 
  },
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace 
});

tags.initialize();

$('.tags-input').tagsinput({
  typeaheadjs: [{
    hint: true,
    highlight: true,
    minLength: 1
  }, {
    name: 'tags',
    display: 'name',
    value: 'name',
    source: tags.ttAdapter()
  }]
});
