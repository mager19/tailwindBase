<template>
	<div class="fps-email">
	
		<div class="container">
			<div class="row">
				<div class="fps-email__col">
					<div class="fps-email__block">
						<div class="fps-email__block-inner">
							<div class="fps-email__heading">
								<p>FRONT PORCH SOLUTIONS</p>
								<h1>Email Template Extension</h1>
							</div>
							<div class="row mt-5">
								<div class="fps-email__form-section">
									<Form />
								</div>
							</div>
							<div class="row">
								<div class="fps-email__buttons">
									<v-btn color="info" @click="$store.dispatch('setEmailTemplateSettings'); snackbar = true">Save</v-btn>
									<v-btn @click="previewTemplate">Preview</v-btn>
								</div>
							</div>
						</div>
	
					</div>
					<div class="fps-email__legacy-notice mt-3">
						<p>View Legacy Plugin <a href="../wp-admin/options-general.php?page=html-template">Settings</a></p>
					</div>
				</div>
			</div>
		</div>
	
		<ModalPreview :dialog="false" ref="modalPreview" />
	
		<v-snackbar v-model="snackbar">
			The template has been updated.
			<v-btn dark flat @click="snackbar = false">
				Close
			</v-btn>
		</v-snackbar>
	
		<!-- <HelloWorld /> -->
		<!-- <input id="background_image" type="text" name="background_image" :value="selectedImage" />
				            	<input id="background_image" type="text" name="background_image" :value="selectedImage" />
				            	<input id="upload_image_button" type="button" class="button-primary" value="Insert Image" @click.prevent="openMediaModal(); postRequest();"/> -->
	</div>
</template>

<style lang="scss">
	@import "~bootstrap/scss/bootstrap";
	.fps-email {
		height: 100%;
		display: flex;
	}
	
	.fps-email__col {
		@extend .col-lg-6;
		@extend .offset-lg-3;
	}
	
	.fps-email__block {
		background-color: white;
		padding: 64px;
		box-shadow: 0px 20px 50px rgba(38, 40, 64, 0.04);
	}
	
	.fps-email__form-section {
		@extend .col-lg-12;
	}
	
	.fps-email__buttons {
		@extend .col-lg-12;
		display: flex;
		.v-btn {
			width: 100%;
			flex: 0 0 50%;
		}
	}

	.fps-email__heading {
		p {
			font-style: normal;
			font-weight: bold;
			line-height: 20px;
			font-size: 14px;
			letter-spacing: 0.1em;
			color: #0984E3;
			text-align: center;
		}

		h1 {
			font-style: normal;
			font-weight: bold;
			line-height: 34px;
			font-size: 24px;
			text-align: center;
			letter-spacing: 0.02em;
			color: #333333;
		}
	}

		// Vuetify Buttons
.v-btn__content {
	letter-spacing: 1px;
	font-size: 12px;
}
.v-btn {
	height: 48px;
}
.v-btn:not(.v-btn--depressed):not(.v-btn--flat) {
	box-shadow: none;
} 

.v-btn:not(.v-btn--depressed):not(.v-btn--flat):active {
	box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.18);
}

.v-btn:focus {
	outline: none;
}
</style>

<script>
	// @ is an alias to /src
	import Form from '@/components/Form.vue'
	import ModalPreview from '@/components/ModalPreview.vue'
	
	export default {
		name: 'home',
		components: {
			Form,
			ModalPreview,
		},
		data() {
			return {
				snackbar: false,
			}
		},
		beforeCreate: function() {
			this.$store.dispatch('getEmailTemplateSettings');
		},
		methods: {
		  previewTemplate: function() {
			this.$store.dispatch('setEmailTemplateSettings');
			this.$refs.modalPreview.dialog=true
		  }
		}
	
	}
</script>
