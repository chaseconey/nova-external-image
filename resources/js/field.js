import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-external-image', IndexField)
  app.component('detail-external-image', DetailField)
  app.component('form-external-image', FormField)
})
