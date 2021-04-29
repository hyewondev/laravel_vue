<template>
    <div>
        <div class="gallery-container">
            <div class="grid gallery-grid cg-24 rg-24">

                <div v-for="(album, index) in albums" :key="albums.id">
                    <div class="gallery-img-card">
                        <img class="gallery-img" :src="album.img" @click="showPhoto(album)">

                        <div class="gallery-img-text" @click="showPhoto(album)">
                            <h2>{{ album.title }}</h2>
                        </div>
                    </div>

                    <div class="gallery-text-card">
                        <div class="mt-2 text-gray-900 font-light-3 gallery-text">
                            {{ album.description }}
                        </div>
                        <div class="inline-flex mt-5">
                            <div class="inline-block box-icon">
                                <font-awesome-icon icon="heart" class="text-red" v-show="album.featured" />
                            </div>
                            <div class="inline-block text-gray-700 box-date text-right text-sm font-light-2">
                                {{ album.date }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <Photo
            v-show="isPhotoModalVisible"
            @close="closePhoto"
            :photo="selectedPhoto"
        />
    </div>
</template>

<script>
import Photo from "./Photo";

export default {
    props: {
        albums: {
            type: Array,
            required: true
        }
    },
    components: {
        Photo
    },
    data() {
        return {
            isPhotoModalVisible: false,
            selectedPhoto: {}
        }
    },
    methods: {
        showPhoto(data) {
            this.selectedPhoto = data;
            this.isPhotoModalVisible = true;
        },
        closePhoto() {
            this.isPhotoModalVisible = false;
        }
    }
}
</script>
