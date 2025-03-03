import { Link } from '@inertiajs/react'
import Layout from './Layout'
import BlogCard from '../Components/Layouts/BlogCard'

export default function Index({ blogs, categories }) {

    return (
        <>
            {/* <Head title="Welcome" /> */}
            <Layout categories={categories}>
                <div className='flex gap-4 flex-wrap p-4'>
                    {blogs.map((blog, index) => (
                        <BlogCard key={index} blog={blog} />
                    ))}
                </div>
            </Layout>
        </>
    )
}
