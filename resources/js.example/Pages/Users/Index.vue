<script setup>
import Pagination from '../../Components/Pagination.vue';
import { ref, watch } from "vue";
import {Inertia} from '@inertiajs/inertia';
import debounce from "lodash/debounce";
let props = defineProps({
    users:Object,
    filters: Object,
    can: Object
});
let search = ref(props.filters.search);
watch(search, debounce(function (value)  {
  console.log('triggered')
    Inertia.get('/users', { search: value}, {
        preserveState: true,
        replace: true
        })
}, 800));
</script>

 <template>
  <Head title="Users" />
    <div class="flex justify-between">
      <Link v-if="can.createUser" href="/users/create">Create New User</Link>
    <input type="text" placeholder="Search" v-model="search">
    </div>
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="user in users.data" :key="user.id">
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm font-medium text-gray-900">
                        {{ user.name }}
                      </div>
                    </div>
                  </div>
                </td>

                <td v-if="user.can.edit" class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <Link  :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900">
                    Edit
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <Pagination :links="users.links" class="mt-6" />
</template>

<style scoped></style>
